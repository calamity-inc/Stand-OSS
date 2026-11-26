#pragma once

#include <cstdint>
#include <string>
#include <vector>

#include <soup/Bitset.hpp>
#include <soup/joaat.hpp>
#include <soup/Optional.hpp>
#include <soup/Promise.hpp>

#include "Spinlock.hpp"

#define TUNAHASH(x) soup::joaat::compileTimeHash(x)

namespace Stand
{
	struct Tunables
	{
		Tunables();

		mutable Spinlock mtx;
		soup::Promise<> ready;
		bool downloading = false;
		int64_t version = 0;
		std::string latest_natives_version = "3407a";

		std::vector<std::string> c_module_whitelist{};
		bool c_module_whitelist_enabled = false;

		std::unordered_map<uint32_t, int64_t> ints{};
		[[nodiscard]] soup::Optional<int64_t> getOptionalInt(uint32_t hash) const noexcept;
		[[nodiscard]] int64_t getInt(uint32_t hash) const;
		[[nodiscard]] int64_t getInt(uint32_t hash, int64_t fallback) const noexcept
		{
			int64_t ret = fallback;
			mtx.lock();
			if (auto e = ints.find(hash); e != ints.end())
			{
				ret = e->second;
			}
			mtx.unlock();
			return ret;
		}

		std::unordered_map<uint32_t, bool> bools{};
		[[nodiscard]] soup::Optional<bool> getOptionalBool(uint32_t hash) const noexcept;
		[[nodiscard]] bool getBool(uint32_t hash) const noexcept;

		//std::unordered_map<uint32_t, std::string> strings{};
		//[[nodiscard]] soup::Optional<std::string> getStr(uint32_t hash) const noexcept;

		std::unordered_map<uint32_t, std::vector<void*>> addresslists{};
		[[nodiscard]] bool isOnAddressList(uint32_t hash, void* addr) const noexcept
		{
			bool ret = false;
			mtx.lock();
			if (auto e = addresslists.find(hash); e != addresslists.end())
			{
				ret = std::find(e->second.begin(), e->second.end(), addr) != e->second.end();
			}
			mtx.unlock();
			return ret;
		}

		void download();
		void load(const std::string& data);
		void fail();
	protected:
		void loadBlobfish(const std::string& blobfish);
		void process();
	};
	inline Tunables g_tunables{};
}
